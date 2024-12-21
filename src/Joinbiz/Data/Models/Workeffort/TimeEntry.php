<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $time_entry_id
 * @property string $party_id
 * @property string $rate_type_id
 * @property string $work_effort_id
 * @property string $timesheet_id
 * @property string $invoice_id
 * @property string $invoice_item_seq_id
 * @property string $from_date
 * @property string $thru_date
 * @property float $hours
 * @property string $comments
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Party $party
 * @property RateType $rateType
 * @property Timesheet $timesheet
 * @property WorkEffort $workEffort
 */
class TimeEntry extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'time_entry';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'time_entry_id';

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
    protected $fillable = ['party_id', 'rate_type_id', 'work_effort_id', 'timesheet_id', 'invoice_id', 'invoice_item_seq_id', 'from_date', 'thru_date', 'hours', 'comments', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function party()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rateType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Accounting\RateType', 'rate_type_id', 'rate_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function timesheet()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\Timesheet', 'timesheet_id', 'timesheet_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffort()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffort', 'work_effort_id', 'work_effort_id');
    }
}
