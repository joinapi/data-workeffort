<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $deliverable_id
 * @property string $deliverable_type_id
 * @property string $deliverable_name
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property DeliverableType $deliverableType
 * @property Requirement[] $requirements
 * @property WorkEffortDeliverableProd[] $workEffortDeliverableProds
 */
class Deliverable extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'deliverable';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'deliverable_id';

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
    protected $fillable = ['deliverable_type_id', 'deliverable_name', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function deliverableType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\DeliverableType', 'deliverable_type_id', 'deliverable_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requirements()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\Requirement', 'deliverable_id', 'deliverable_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortDeliverableProds()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortDeliverableProd', 'deliverable_id', 'deliverable_id');
    }
}
