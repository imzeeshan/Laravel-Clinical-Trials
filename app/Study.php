<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
   protected $table = 'studies';
   
   protected $fillable = [
                            'nct_id','brief_title','official_title', 'sponsors',
                            'source','oversight_info','brief_summary','detailed_description',
                            'status','start_date','completion_date','phase','study_type','has_expanded_access',
                            'study_design_info','primary_outcomes','secondary_outcomes','intervention',
                            'eligibility','location','urls','references','keywords','intervention_browse',
                            'provided_documents'
                        ];
   
   
}
