<?php
/**
 * Flyer Model connecting relationships and mass assignment.
 *
 * A *Model*, typically connects data flow from database to web content.<br>
 * the protected fields prevent hackers from mass assigning important table structure.
 *
 * @author Simon Assouline
 * @category Model
 * @link http://simontests.dev
 *
 *
 * @copyright Copyright (c) 2016. Simon Assouline of SIADEV  - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 *
 *
 */

namespace LaravelExamples;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class Flyer
 * @package App
 */
class Flyer extends Model
{
    protected $fillable = [
        'street', 'city', 'state', 'postcode', 'country', 'price', 'description', 'place'
    ];

    /**
     * Find the flyer at the given address
     * @param  string $postcode
     * @param  string $street
     * @return $query
     */
    public static function LocatedAt($postcode, $street)
    {
        $street = str_replace('-', ' ', $street);

        return static::where(compact('postcode', 'street'))->first();

    }

    public function addPhoto(Photo $photo)
    {
        return $this->photos()->save($photo);
    }

    public function getPriceAttribute($price)
    {
        return '$' . number_format($price);
    }

    /**
     * A Flyer is composed of many photos.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany('LaravelExamples\Photo');
    }

    public static function getPossiblePlaces()
    {
        $type = DB::select( DB::raw("SHOW COLUMNS FROM flyers WHERE Field = 'place'")  )[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = array();
        foreach( explode(',', $matches[1]) as $value )
        {
            $v = trim( $value, "'" );
            $enum = array_add($enum, $v, $v);
        }
        return $enum;
    }
    public static function getPlacesStr()
    {
        $type = DB::select( DB::raw("SHOW COLUMNS FROM flyers WHERE Field = 'place'")  )[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = array();
//        $v = "array('size:5', 'match:/";
        $v = "regex:/^(";
        foreach( explode(',', $matches[1]) as $value )
        {
            $v = $v. trim( $value, "'" ) . '|';
        }
            $v = rtrim($v, "|") . ")$/";
        return $v;

    }
}
