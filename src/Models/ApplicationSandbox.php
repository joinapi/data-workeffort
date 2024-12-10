<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $application_id
 * @property string $work_effort_id
 * @property string $party_id
 * @property string $role_type_id
 * @property string $from_date
 * @property string $runtime_data_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property RuntimeData $runtimeData
 */
class ApplicationSandbox extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'application_sandbox';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'application_id';

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
    protected $fillable = ['work_effort_id', 'party_id', 'role_type_id', 'from_date', 'runtime_data_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function runtimeData()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\RuntimeData', 'runtime_data_id', 'runtime_data_id');
    }
}
