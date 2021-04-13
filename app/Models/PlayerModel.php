<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PlayerModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PlayerModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PlayerModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PlayerModel query()
 * @mixin \Eloquent
 */
class PlayerModel extends Model
{
    protected $table = 'player';

    protected $guarded = [];

    public function enrolls()
    {
        return $this->hasMany('App\Models\EnrollModel', 'player_id', 'id');
    }

    public function store($playerId, $data)
    {
        return $this->updateOrCreate(['player_id' => $playerId], $data);
    }

    public function getPlayers()
    {
        return $this->where('account_id', auth()->user()->id)->orderByDesc('id')->get();
    }
}
