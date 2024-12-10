<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $work_effort_search_result_id
 * @property string $visit_id
 * @property string $order_by_name
 * @property string $is_ascending
 * @property float $num_results
 * @property float $seconds_total
 * @property string $search_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property WorkEffortSearchConstraint[] $workEffortSearchConstraints
 */
class WorkEffortSearchResult extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'work_effort_search_result';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'work_effort_search_result_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['visit_id', 'order_by_name', 'is_ascending', 'num_results', 'seconds_total', 'search_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortSearchConstraints()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortSearchConstraint', 'work_effort_search_result_id', 'work_effort_search_result_id');
    }
}
