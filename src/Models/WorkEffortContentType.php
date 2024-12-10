<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $work_effort_content_type_id
 * @property string $parent_type_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property WorkEffortContent[] $workEffortContents
 * @property WorkEffortContentType $workEffortContentTypeByParentTypeId
 */
class WorkEffortContentType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'work_effort_content_type';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'work_effort_content_type_id';

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
    protected $fillable = ['parent_type_id', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortContent', 'work_effort_content_type_id', 'work_effort_content_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffortContentTypeByParentTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffortContentType', 'parent_type_id', 'work_effort_content_type_id');
    }
}
