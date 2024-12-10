<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $work_effort_id
 * @property string $fixed_asset_type_id
 * @property float $estimated_quantity
 * @property float $estimated_duration
 * @property float $estimated_cost
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property FixedAssetType $fixedAssetType
 * @property WorkEffort $workEffort
 */
class WorkEffortFixedAssetStd extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'work_effort_fixed_asset_std';

    /**
     * @var array
     */
    protected $fillable = ['estimated_quantity', 'estimated_duration', 'estimated_cost', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fixedAssetType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\FixedAssetType', 'fixed_asset_type_id', 'fixed_asset_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffort()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffort', 'work_effort_id', 'work_effort_id');
    }
}
