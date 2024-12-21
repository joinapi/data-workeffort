<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $work_effort_id
 * @property string $cost_component_type_id
 * @property string $from_date
 * @property string $cost_component_calc_id
 * @property string $thru_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CostComponentCalc $costComponentCalc
 * @property CostComponentType $costComponentType
 * @property WorkEffort $workEffort
 */
class WorkEffortCostCalc extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'work_effort_cost_calc';

    /**
     * @var array
     */
    protected $fillable = ['cost_component_calc_id', 'thru_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function costComponentCalc()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\CostComponentCalc', 'cost_component_calc_id', 'cost_component_calc_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function costComponentType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\CostComponentType', 'cost_component_type_id', 'cost_component_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffort()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffort', 'work_effort_id', 'work_effort_id');
    }
}
