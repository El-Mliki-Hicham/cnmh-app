<!-- Id Consultation Field -->
<div class="col-sm-12">
    {!! Form::label('id_consultation', __('models/rendezVouses.fields.id_consultation').':') !!}
    <p>{{ $rendezVous->id_consultation }}</p>
</div>

<!-- Date Rendez Vous Field -->
<div class="col-sm-12">
    {!! Form::label('date_rendez_vous', __('models/rendezVouses.fields.date_rendez_vous').':') !!}
    <p>{{ $rendezVous->date_rendez_vous }}</p>
</div>

<!-- Etat Field -->
<div class="col-sm-12">
    {!! Form::label('etat', __('models/rendezVouses.fields.etat').':') !!}
    <p>{{ $rendezVous->etat }}</p>
</div>

<!-- Remarques Field -->
<div class="col-sm-12">
    {!! Form::label('remarques', __('models/rendezVouses.fields.remarques').':') !!}
    <p>{{ $rendezVous->remarques }}</p>
</div>

