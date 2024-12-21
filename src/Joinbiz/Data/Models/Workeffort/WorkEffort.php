<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $work_effort_id
 * @property string $work_effort_type_id
 * @property string $current_status_id
 * @property string $work_effort_purpose_type_id
 * @property string $work_effort_parent_id
 * @property string $scope_enum_id
 * @property string $estimate_calc_method
 * @property string $money_uom_id
 * @property string $facility_id
 * @property string $recurrence_info_id
 * @property string $temp_expr_id
 * @property string $runtime_data_id
 * @property string $note_id
 * @property string $accommodation_map_id
 * @property string $last_status_update
 * @property float $priority
 * @property float $percent_complete
 * @property string $work_effort_name
 * @property string $show_as_enum_id
 * @property string $send_notification_email
 * @property string $description
 * @property string $location_desc
 * @property string $estimated_start_date
 * @property string $estimated_completion_date
 * @property string $actual_start_date
 * @property string $actual_completion_date
 * @property float $estimated_milli_seconds
 * @property float $estimated_setup_millis
 * @property float $actual_milli_seconds
 * @property float $actual_setup_millis
 * @property float $total_milli_seconds_allowed
 * @property float $total_money_allowed
 * @property string $special_terms
 * @property float $time_transparency
 * @property string $universal_id
 * @property string $source_reference_id
 * @property string $fixed_asset_id
 * @property string $info_url
 * @property string $service_loader_name
 * @property float $quantity_to_produce
 * @property float $quantity_produced
 * @property float $quantity_rejected
 * @property float $reserv_persons
 * @property float $reserv2nd_p_p_perc
 * @property float $reserv_nth_p_p_perc
 * @property string $accommodation_spot_id
 * @property float $revision_number
 * @property string $created_date
 * @property string $created_by_user_login
 * @property string $last_modified_date
 * @property string $last_modified_by_user_login
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ShoppingListWorkEffort[] $shoppingListWorkEfforts
 * @property SalesOpportunityWorkEffort[] $salesOpportunityWorkEfforts
 * @property CostComponent[] $costComponents
 * @property InventoryItemDetail[] $inventoryItemDetails
 * @property Shipment[] $shipmentsByEstimatedArrivalWorkEffId
 * @property Shipment[] $shipmentsByEstimatedShipWorkEffId
 * @property CustRequestWorkEffort[] $custRequestWorkEfforts
 * @property FixedAssetMaint[] $fixedAssetMaintsByScheduleWorkEffortId
 * @property PersonTraining[] $personTrainings
 * @property CommunicationEventWorkEff[] $communicationEventWorkEffs
 * @property AccommodationMap $accommodationMap
 * @property StatusItem $statusItemByCurrentStatusId
 * @property CustomMethod $customMethodByEstimateCalcMethod
 * @property Facility $facility
 * @property Uom $uomByMoneyUomId
 * @property NoteData $noteData
 * @property WorkEffort $workEffortByWorkEffortParentId
 * @property WorkEffortPurposeType $workEffortPurposeType
 * @property RecurrenceInfo $recurrenceInfo
 * @property RuntimeData $runtimeData
 * @property Enumeration $enumerationByScopeEnumId
 * @property TemporalExpression $temporalExpression
 * @property WorkEffortType $workEffortType
 * @property QuoteItem[] $quoteItems
 * @property ProductAssoc[] $productAssocsByRoutingWorkEffortId
 * @property OrderHeaderWorkEffort[] $orderHeaderWorkEfforts
 * @property RateAmount[] $rateAmounts
 * @property QuoteWorkEffort[] $quoteWorkEfforts
 * @property ProductMaint[] $productMaintsByMaintTemplateWorkEffortId
 * @property AcctgTrans[] $acctgTrans
 * @property WorkEffortPartyAssignment[] $workEffortPartyAssignments
 * @property AgreementWorkEffortApplic[] $agreementWorkEffortApplics
 * @property CustRequestItemWorkEffort[] $custRequestItemWorkEfforts
 * @property WorkEffortSurveyAppl[] $workEffortSurveyAppls
 * @property WorkEffortAssoc[] $workEffortAssocsByWorkEffortIdFrom
 * @property WorkEffortAssoc[] $workEffortAssocsByWorkEffortIdTo
 * @property WorkEffortStatus[] $workEffortStatuses
 * @property WorkEffortSkillStandard[] $workEffortSkillStandards
 * @property WorkEffortIcalData $workEffortIcalData
 * @property WorkEffortAttribute[] $workEffortAttributes
 * @property WorkEffortReview[] $workEffortReviews
 * @property WorkEffortBilling[] $workEffortBillings
 * @property WorkOrderItemFulfillment[] $workOrderItemFulfillments
 * @property WorkEffortContactMechNew[] $workEffortContactMechNews
 * @property WorkEffortInventoryAssign[] $workEffortInventoryAssigns
 * @property WorkEffortNote[] $workEffortNotes
 * @property WorkEffortContent[] $workEffortContents
 * @property WorkEffortFixedAssetAssign[] $workEffortFixedAssetAssigns
 * @property WorkEffortKeyword[] $workEffortKeywords
 * @property WorkEffortCostCalc[] $workEffortCostCalcs
 * @property WorkEffortGoodStandard[] $workEffortGoodStandards
 * @property WorkEffortTransBox[] $workEffortTransBoxesByProcessWorkEffortId
 * @property WorkEffortDeliverableProd[] $workEffortDeliverableProds
 * @property WorkRequirementFulfillment[] $workRequirementFulfillments
 * @property WorkEffortInventoryProduced[] $workEffortInventoryProduceds
 * @property WorkEffortFixedAssetStd[] $workEffortFixedAssetStds
 * @property TimeEntry[] $timeEntries
 * @property WorkEffortEventReminder[] $workEffortEventReminders
 */
class WorkEffort extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'work_effort';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'work_effort_id';

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
    protected $fillable = ['work_effort_type_id', 'current_status_id', 'work_effort_purpose_type_id', 'work_effort_parent_id', 'scope_enum_id', 'estimate_calc_method', 'money_uom_id', 'facility_id', 'recurrence_info_id', 'temp_expr_id', 'runtime_data_id', 'note_id', 'accommodation_map_id', 'last_status_update', 'priority', 'percent_complete', 'work_effort_name', 'show_as_enum_id', 'send_notification_email', 'description', 'location_desc', 'estimated_start_date', 'estimated_completion_date', 'actual_start_date', 'actual_completion_date', 'estimated_milli_seconds', 'estimated_setup_millis', 'actual_milli_seconds', 'actual_setup_millis', 'total_milli_seconds_allowed', 'total_money_allowed', 'special_terms', 'time_transparency', 'universal_id', 'source_reference_id', 'fixed_asset_id', 'info_url', 'service_loader_name', 'quantity_to_produce', 'quantity_produced', 'quantity_rejected', 'reserv_persons', 'reserv2nd_p_p_perc', 'reserv_nth_p_p_perc', 'accommodation_spot_id', 'revision_number', 'created_date', 'created_by_user_login', 'last_modified_date', 'last_modified_by_user_login', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shoppingListWorkEfforts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\ShoppingListWorkEffort', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOpportunityWorkEfforts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesOpportunityWorkEffort', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function costComponents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\CostComponent', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItemDetails()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItemDetail', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentsByEstimatedArrivalWorkEffId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\Shipment', 'estimated_arrival_work_eff_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentsByEstimatedShipWorkEffId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\Shipment', 'estimated_ship_work_eff_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestWorkEfforts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CustRequestWorkEffort', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetMaintsByScheduleWorkEffortId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FixedAssetMaint', 'schedule_work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personTrainings()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PersonTraining', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventWorkEffs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\CommunicationEventWorkEff', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accommodationMap()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Accounting\AccommodationMap', 'accommodation_map_id', 'accommodation_map_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItemByCurrentStatusId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'current_status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customMethodByEstimateCalcMethod()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\CustomMethod', 'estimate_calc_method', 'custom_method_id');
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
    public function uomByMoneyUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'money_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function noteData()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\NoteData', 'note_id', 'note_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffortByWorkEffortParentId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffort', 'work_effort_parent_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffortPurposeType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffortPurposeType', 'work_effort_purpose_type_id', 'work_effort_purpose_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recurrenceInfo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Service\RecurrenceInfo', 'recurrence_info_id', 'recurrence_info_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function runtimeData()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Service\RuntimeData', 'runtime_data_id', 'runtime_data_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByScopeEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'scope_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function temporalExpression()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Service\TemporalExpression', 'temp_expr_id', 'temp_expr_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffortType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffortType', 'work_effort_type_id', 'work_effort_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quoteItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\QuoteItem', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productAssocsByRoutingWorkEffortId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductAssoc', 'routing_work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderHeaderWorkEfforts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderHeaderWorkEffort', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rateAmounts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\RateAmount', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quoteWorkEfforts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\QuoteWorkEffort', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productMaintsByMaintTemplateWorkEffortId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductMaint', 'maint_template_work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acctgTrans()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\AcctgTrans', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortPartyAssignments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortPartyAssignment', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementWorkEffortApplics()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AgreementWorkEffortApplic', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestItemWorkEfforts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CustRequestItemWorkEffort', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortSurveyAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortSurveyAppl', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortAssocsByWorkEffortIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortAssoc', 'work_effort_id_from', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortAssocsByWorkEffortIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortAssoc', 'work_effort_id_to', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortStatus', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortSkillStandards()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortSkillStandard', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function workEffortIcalData()
    {
        return $this->hasOne('Joinbiz\Data\Models\Workeffort\WorkEffortIcalData', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortAttributes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortAttribute', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortReviews()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortReview', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortBillings()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortBilling', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workOrderItemFulfillments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\WorkOrderItemFulfillment', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortContactMechNews()
    {
        return $this->hasMany('\WorkEffortContactMechNew', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortInventoryAssigns()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortInventoryAssign', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortNotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortNote', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortContent', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortFixedAssetAssigns()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortFixedAssetAssign', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortKeywords()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortKeyword', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortCostCalcs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortCostCalc', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortGoodStandards()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortGoodStandard', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortTransBoxesByProcessWorkEffortId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortTransBox', 'process_work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortDeliverableProds()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortDeliverableProd', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workRequirementFulfillments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\WorkRequirementFulfillment', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortInventoryProduceds()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortInventoryProduced', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortFixedAssetStds()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortFixedAssetStd', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timeEntries()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\TimeEntry', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortEventReminders()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortEventReminder', 'work_effort_id', 'work_effort_id');
    }
}
