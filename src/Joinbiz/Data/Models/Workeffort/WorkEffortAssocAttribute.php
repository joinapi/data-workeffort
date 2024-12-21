<?php

namespace Joinbiz\Data\Models\Workeffort;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $work_effort_id_from
 * @property string $work_effort_id_to
 * @property string $work_effort_assoc_type_id
 * @property string $attr_name
 * @property string $from_date
 * @property string $attr_value
 * @property string $attr_description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 */
class WorkEffortAssocAttribute extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'work_effort_assoc_attribute';

    /**
     * @var array
     */
    protected $fillable = ['from_date', 'attr_value', 'attr_description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];
}
