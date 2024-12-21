<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $work_effort_id
 * @property string $product_id
 * @property string $work_effort_good_std_type_id
 * @property string $from_date
 * @property string $status_id
 * @property string $thru_date
 * @property float $estimated_quantity
 * @property float $estimated_cost
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Product $product
 * @property StatusItem $statusItem
 * @property WorkEffortGoodStandardType $workEffortGoodStandardType
 * @property WorkEffort $workEffort
 */
class WorkEffortGoodStandard extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'work_effort_good_standard';

    /**
     * @var array
     */
    protected $fillable = ['status_id', 'thru_date', 'estimated_quantity', 'estimated_cost', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Product', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffortGoodStandardType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffortGoodStandardType', 'work_effort_good_std_type_id', 'work_effort_good_std_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffort()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffort', 'work_effort_id', 'work_effort_id');
    }
}
