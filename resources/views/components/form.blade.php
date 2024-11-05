{{ html()->form('PUT', route('Packingslip.submitForm'))->open() }}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h4 class="form-step-1">{{ trans('form.heading.step-1')}} * </h4>

<div class="form-group">
    <select name="delivery-method" id="delivery-method" class="form-control">
            <option value="" selected="selected" disabled>{{ trans('form.heading.step-1')}}</option>
        @foreach ($shipingMethods['data'] as $shipingMethod)
            <option value="{{$shipingMethod['id']}}">{{ $shipingMethod['name'] }} </option>
        @endforeach
    </select>
</div>

<div class="shipping-options" style="display:none;">
    <h4 class="form-step-2">{{ trans('form.heading.step-2')}} * </h4>

    @foreach ($shipingMethods['data'] as $shipingMethod)
        @foreach($shipingMethod['combinations'] as $shipingOption)
            <div class="form-group" data-id="{{ $shipingMethod['id'] }}" style="display:none;">
                <input type="checkbox" name="shipping-option" id="shipping-option-{{ $shipingOption['id'] }}" value="{{ $shipingOption['id'] }}">
                <label for="shipping-option-{{ $shipingOption['id'] }}"> {{ $shipingOption['name'] }}</label>
            </div>
        @endforeach
    @endforeach 
</div>

<div class="form-group mt-5">
{{ html()->submit(trans('form.submit.generate packing slip'))->class('btn btn-primary')->id('submit-packing-slip-form')->disabled() }}
</div>

{{ html()->form()->close() }}


<script type="text/javascript">
    const selectElement = document.querySelector("select#delivery-method");

    selectElement.addEventListener("change", (event) => {
        document.querySelector(".shipping-options").style.display = 'block';
        document.getElementById('submit-packing-slip-form').disabled = false;

        checkboxesGroups = document.querySelectorAll('.shipping-options .form-group')
        checkboxesGroups.forEach(element => {
            element.style.display = 'none';
        });

        checkboxes = document.querySelectorAll('.shipping-options .form-group input')
        checkboxes.forEach(element => {
            element.checked = false;
        });

        shippingoptions = document.querySelectorAll('[data-id="'+selectElement.value+'"]');
        shippingoptions.forEach(element => {
            element.style.display = 'block'
        });
    });
</script>