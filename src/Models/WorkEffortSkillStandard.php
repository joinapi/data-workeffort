<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $work_effort_id
 * @property string $skill_type_id
 * @property float $estimated_num_people
 * @property float $estimated_duration
 * @property float $estimated_cost
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property SkillType $skillType
 * @property WorkEffort $workEffort
 */
class WorkEffortSkillStandard extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'work_effort_skill_standard';

    /**
     * @var array
     */
    protected $fillable = ['estimated_num_people', 'estimated_duration', 'estimated_cost', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function skillType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\SkillType', 'skill_type_id', 'skill_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffort()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffort', 'work_effort_id', 'work_effort_id');
    }
}
