<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $work_effort_id
 * @property string $communication_event_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CommunicationEvent $communicationEvent
 * @property WorkEffort $workEffort
 */
class CommunicationEventWorkEff extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'communication_event_work_eff';

    /**
     * @var array
     */
    protected $fillable = ['description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function communicationEvent()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\CommunicationEvent', 'communication_event_id', 'communication_event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffort()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffort', 'work_effort_id', 'work_effort_id');
    }
}
