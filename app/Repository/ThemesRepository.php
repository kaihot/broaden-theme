<?php
namespace App\Repository;
use App\Models\Themes;
use Carbon\Carbon;

/**
 * Created by PhpStorm.
 * User: kai
 * Date: 2018/04/14
 * Time: 0:59
 */

class ThemesRepository
{
    private $themes;
    private $carbon;

    public function __construct(
        Themes $themes,
        Carbon $carbon
    )
    {
        $this->themes = $themes;
        $this->carbon = $carbon;
    }

    /**
     * @param $limit
     * @return Themes
     */
    public function getRecent($limit){
        return $this->themes->aliveTheme($this->carbon)->take($limit)->get();
    }
}