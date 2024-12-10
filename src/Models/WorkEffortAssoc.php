<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $work_effort_id_from
 * @property string $work_effort_id_to
 * @property string $work_effort_assoc_type_id
 * @property string $from_date
 * @property float $sequence_num
 * @property string $thru_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property WorkEffort $workEffortByWorkEffortIdFrom
 * @property WorkEffort $workEffortByWorkEffortIdTo
 * @property WorkEffortAssocType $workEffortAssocType
 */
class WorkEffortAssoc extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'work_effort_assoc';

    /**
     * @var array
     */
    protected $fillable = ['sequence_num', 'thru_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffortByWorkEffortIdFrom()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffort', 'work_effort_id_from', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffortByWorkEffortIdTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffort', 'work_effort_id_to', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffortAssocType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffortAssocType', 'work_effort_assoc_type_id', 'work_effort_assoc_type_id');
    }
}
