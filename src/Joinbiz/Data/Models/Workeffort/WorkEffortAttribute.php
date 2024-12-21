<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $work_effort_id
 * @property string $attr_name
 * @property string $attr_value
 * @property string $attr_description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property WorkEffort $workEffort
 */
class WorkEffortAttribute extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'work_effort_attribute';

    /**
     * @var array
     */
    protected $fillable = ['attr_value', 'attr_description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffort()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffort', 'work_effort_id', 'work_effort_id');
    }
}
