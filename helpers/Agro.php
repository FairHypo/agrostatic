<?php
function getServicesToken($grant_type = 'client_credentials', $client_id = null, $client_secret = null, $scope = null)
{
    if( empty($client_id) || empty($client_secret) ) {
        $client_id = env('STATIC_CLIENT_ID');
        $client_secret = env('STATIC_CLIENT_SECRET');
    }

    $guzzle = new GuzzleHttp\Client;

    $response = $guzzle->post(env('STATIC_HOST') . '/oauth/token', [
        'form_params' => [
            'grant_type' => $grant_type,
            'client_id' => $client_id,
            'client_secret' => $client_secret,
            'scope' => $scope,
        ],
    ]);

    return $response;
}

function getStaticPath( $identifier = null, $width = null, $type = null )
{
    if( empty($type) ) {
        $type = 'photo';
    }

    if( empty($width) ) {
        $width = 200;
    }

    switch( gettype($identifier) ) {

        case 'integer':
            $class = '\App\Models\\' . ucfirst($type);

            if( !($file = $class::find($identifier)) ) {
                $file = false;
            }

            break;

        case 'object':

            if( method_exists($identifier,'photos') ) {
                $file = $identifier->photos()->where('width', '<=', $width)->orderBy('width', 'DESC')->first();
            } else {
                $file = false;
            }

            break;

        default:
            $file = false;
    }

    if( $file != false && $file->path[0] != '/' ) {
        $file->path = '/' . $file->path;
    }
    return !empty($file) ? env('STATIC_HOST') . '/' . env('STATIC_IMG_ROOT')  . $file->path . '/' . $file->name : false;
}