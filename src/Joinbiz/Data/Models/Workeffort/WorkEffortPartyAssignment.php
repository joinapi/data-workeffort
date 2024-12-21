<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $work_effort_id
 * @property string $party_id
 * @property string $role_type_id
 * @property string $from_date
 * @property string $assigned_by_user_login_id
 * @property string $status_id
 * @property string $expectation_enum_id
 * @property string $delegate_reason_enum_id
 * @property string $facility_id
 * @property string $availability_status_id
 * @property string $thru_date
 * @property string $status_date_time
 * @property string $comments
 * @property string $must_rsvp
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property UserLogin $userLoginByAssignedByUserLoginId
 * @property StatusItem $statusItemByAvailabilityStatusId
 * @property Enumeration $enumerationByDelegateReasonEnumId
 * @property Enumeration $enumerationByExpectationEnumId
 * @property Facility $facility
 * @property StatusItem $statusItem
 * @property WorkEffort $workEffort
 */
class WorkEffortPartyAssignment extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'work_effort_party_assignment';

    /**
     * @var array
     */
    protected $fillable = ['assigned_by_user_login_id', 'status_id', 'expectation_enum_id', 'delegate_reason_enum_id', 'facility_id', 'availability_status_id', 'thru_date', 'status_date_time', 'comments', 'must_rsvp', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByAssignedByUserLoginId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Security\UserLogin', 'assigned_by_user_login_id', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItemByAvailabilityStatusId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'availability_status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByDelegateReasonEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'delegate_reason_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByExpectationEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'expectation_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function facility()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Facility', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffort()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffort', 'work_effort_id', 'work_effort_id');
    }
}
