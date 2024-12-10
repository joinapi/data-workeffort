<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $work_effort_id
 * @property string $fixed_asset_id
 * @property string $from_date
 * @property string $status_id
 * @property string $availability_status_id
 * @property string $thru_date
 * @property float $allocated_cost
 * @property string $comments
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property StatusItem $statusItemByAvailabilityStatusId
 * @property FixedAsset $fixedAsset
 * @property StatusItem $statusItem
 * @property WorkEffort $workEffort
 */
class WorkEffortFixedAssetAssign extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'work_effort_fixed_asset_assign';

    /**
     * @var array
     */
    protected $fillable = ['status_id', 'availability_status_id', 'thru_date', 'allocated_cost', 'comments', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItemByAvailabilityStatusId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\StatusItem', 'availability_status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fixedAsset()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\FixedAsset', 'fixed_asset_id', 'fixed_asset_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\StatusItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffort()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffort', 'work_effort_id', 'work_effort_id');
    }
}
