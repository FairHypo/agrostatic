<?php namespace Fairhypo\Agrostatic;

class Agro
{
    public function getStaticPath( $identifier = null, $width = null, $type = null )
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
        return !empty($file) ? 'http://static.agro24.ru/img' . $file->path . '/' . $file->name : false;
    }
}