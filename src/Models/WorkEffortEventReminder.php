<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $work_effort_id
 * @property string $sequence_id
 * @property string $contact_mech_id
 * @property string $party_id
 * @property string $reminder_date_time
 * @property float $repeat_count
 * @property float $repeat_interval
 * @property float $current_count
 * @property float $reminder_offset
 * @property string $locale_id
 * @property string $time_zone_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ContactMech $contactMech
 * @property Party $party
 * @property WorkEffort $workEffort
 */
class WorkEffortEventReminder extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'work_effort_event_reminder';

    /**
     * @var array
     */
    protected $fillable = ['contact_mech_id', 'party_id', 'reminder_date_time', 'repeat_count', 'repeat_interval', 'current_count', 'reminder_offset', 'locale_id', 'time_zone_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactMech()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\ContactMech', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function party()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\Party', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffort()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffort', 'work_effort_id', 'work_effort_id');
    }
}
