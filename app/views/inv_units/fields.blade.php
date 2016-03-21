
{{ Former::text('unit_name') }}
{{ Former::radio('is_active')->radios(array(0=>'no', 1=>'yes'))->inline()->check(1) }}
