<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $process_work_effort_id
 * @property string $to_activity_id
 * @property string $transition_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property WorkEffort $workEffortByProcessWorkEffortId
 */
class WorkEffortTransBox extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'work_effort_trans_box';

    /**
     * @var array
     */
    protected $fillable = ['last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffortByProcessWorkEffortId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffort', 'process_work_effort_id', 'work_effort_id');
    }
}
