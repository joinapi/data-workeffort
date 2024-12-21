<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $work_effort_search_result_id
 * @property string $constraint_seq_id
 * @property string $constraint_name
 * @property string $info_string
 * @property string $include_sub_work_efforts
 * @property string $is_and
 * @property string $any_prefix
 * @property string $any_suffix
 * @property string $remove_stems
 * @property string $low_value
 * @property string $high_value
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property WorkEffortSearchResult $workEffortSearchResult
 */
class WorkEffortSearchConstraint extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'work_effort_search_constraint';

    /**
     * @var array
     */
    protected $fillable = ['constraint_name', 'info_string', 'include_sub_work_efforts', 'is_and', 'any_prefix', 'any_suffix', 'remove_stems', 'low_value', 'high_value', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffortSearchResult()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffortSearchResult', 'work_effort_search_result_id', 'work_effort_search_result_id');
    }
}
