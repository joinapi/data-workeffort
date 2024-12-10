<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $timesheet_id
 * @property string $party_id
 * @property string $client_party_id
 * @property string $status_id
 * @property string $approved_by_user_login_id
 * @property string $from_date
 * @property string $thru_date
 * @property string $comments
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property TimesheetRole[] $timesheetRoles
 * @property UserLogin $userLoginByApprovedByUserLoginId
 * @property Party $partyByClientPartyId
 * @property Party $party
 * @property StatusItem $statusItem
 * @property TimeEntry[] $timeEntries
 */
class Timesheet extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'timesheet';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'timesheet_id';

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
    protected $fillable = ['party_id', 'client_party_id', 'status_id', 'approved_by_user_login_id', 'from_date', 'thru_date', 'comments', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timesheetRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\TimesheetRole', 'timesheet_id', 'timesheet_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByApprovedByUserLoginId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\UserLogin', 'approved_by_user_login_id', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByClientPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\Party', 'client_party_id', 'party_id');
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
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\StatusItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timeEntries()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\TimeEntry', 'timesheet_id', 'timesheet_id');
    }
}
