@extends('backend.layouts.app')

@section('title', __('Create Orderdetail'))

@section('content')
    <x-forms.post :action="route('admin.orderdetail.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Orderdetail')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.orderdetail.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="collection_amount" class="col-md-2 col-form-label">@lang('collection_amount')</label>

                    <div class="col-md-10">
                        <input type="text" name="collection_amount" class="form-control" placeholder="{{  __('collection_amount') }} " value="{{  old('collection_amount') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="note" class="col-md-2 col-form-label">@lang('note')</label>

                    <div class="col-md-10">
                        <input type="text" name="note" class="form-control" placeholder="{{  __('note') }} " value="{{  old('note') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="preferred_sender_date" class="col-md-2 col-form-label">@lang('preferred_sender_date')</label>

                    <div class="col-md-10">
                        <input type="text" name="preferred_sender_date" class="form-control" placeholder="{{  __('preferred_sender_date') }} " value="{{  old('preferred_sender_date') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="preferred_sender_from_time" class="col-md-2 col-form-label">@lang('preferred_sender_from_time')</label>

                    <div class="col-md-10">
                        <input type="text" name="preferred_sender_from_time" class="form-control" placeholder="{{  __('preferred_sender_from_time') }} " value="{{  old('preferred_sender_from_time') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="preferred_sender_to_time" class="col-md-2 col-form-label">@lang('preferred_sender_to_time')</label>

                    <div class="col-md-10">
                        <input type="text" name="preferred_sender_to_time" class="form-control" placeholder="{{  __('preferred_sender_to_time') }} " value="{{  old('preferred_sender_to_time') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="preferred_receiver_date" class="col-md-2 col-form-label">@lang('preferred_receiver_date')</label>

                    <div class="col-md-10">
                        <input type="text" name="preferred_receiver_date" class="form-control" placeholder="{{  __('preferred_receiver_date') }} " value="{{  old('preferred_receiver_date') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="preferred_receiver_from_time" class="col-md-2 col-form-label">@lang('preferred_receiver_from_time')</label>

                    <div class="col-md-10">
                        <input type="text" name="preferred_receiver_from_time" class="form-control" placeholder="{{  __('preferred_receiver_from_time') }} " value="{{  old('preferred_receiver_from_time') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="preferred_receiver_to_time" class="col-md-2 col-form-label">@lang('preferred_receiver_to_time')</label>

                    <div class="col-md-10">
                        <input type="text" name="preferred_receiver_to_time" class="form-control" placeholder="{{  __('preferred_receiver_to_time') }} " value="{{  old('preferred_receiver_to_time') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="require_signature" class="col-md-2 col-form-label">@lang('require_signature')</label>

                    <div class="col-md-10">
                        <input type="text" name="require_signature" class="form-control" placeholder="{{  __('require_signature') }} " value="{{  old('require_signature') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="require_picture" class="col-md-2 col-form-label">@lang('require_picture')</label>

                    <div class="col-md-10">
                        <input type="text" name="require_picture" class="form-control" placeholder="{{  __('require_picture') }} " value="{{  old('require_picture') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="same_package" class="col-md-2 col-form-label">@lang('same_package')</label>

                    <div class="col-md-10">
                        <input type="text" name="same_package" class="form-control" placeholder="{{  __('same_package') }} " value="{{  old('same_package') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="senderable_id" class="col-md-2 col-form-label">@lang('senderable_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="senderable_id" class="form-control" placeholder="{{  __('senderable_id') }} " value="{{  old('senderable_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="senderable_type" class="col-md-2 col-form-label">@lang('senderable_type')</label>

                    <div class="col-md-10">
                        <input type="text" name="senderable_type" class="form-control" placeholder="{{  __('senderable_type') }} " value="{{  old('senderable_type') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receiverable_id" class="col-md-2 col-form-label">@lang('receiverable_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="receiverable_id" class="form-control" placeholder="{{  __('receiverable_id') }} " value="{{  old('receiverable_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receiverable_type" class="col-md-2 col-form-label">@lang('receiverable_type')</label>

                    <div class="col-md-10">
                        <input type="text" name="receiverable_type" class="form-control" placeholder="{{  __('receiverable_type') }} " value="{{  old('receiverable_type') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="payment_type_id" class="col-md-2 col-form-label">@lang('payment_type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="payment_type_id" class="form-control" placeholder="{{  __('payment_type_id') }} " value="{{  old('payment_type_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="cash_collection_type_id" class="col-md-2 col-form-label">@lang('cash_collection_type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="cash_collection_type_id" class="form-control" placeholder="{{  __('cash_collection_type_id') }} " value="{{  old('cash_collection_type_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="customer_id" class="col-md-2 col-form-label">@lang('customer_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="customer_id" class="form-control" placeholder="{{  __('customer_id') }} " value="{{  old('customer_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="piggy_bank_id" class="col-md-2 col-form-label">@lang('piggy_bank_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="piggy_bank_id" class="form-control" placeholder="{{  __('piggy_bank_id') }} " value="{{  old('piggy_bank_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{  old('type_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="sender_location_id" class="col-md-2 col-form-label">@lang('sender_location_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="sender_location_id" class="form-control" placeholder="{{  __('sender_location_id') }} " value="{{  old('sender_location_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="receiver_location_id" class="col-md-2 col-form-label">@lang('receiver_location_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="receiver_location_id" class="form-control" placeholder="{{  __('receiver_location_id') }} " value="{{  old('receiver_location_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="collection_currency" class="col-md-2 col-form-label">@lang('collection_currency')</label>

                    <div class="col-md-10">
                        <input type="text" name="collection_currency" class="form-control" placeholder="{{  __('collection_currency') }} " value="{{  old('collection_currency') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="store_id" class="col-md-2 col-form-label">@lang('store_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="store_id" class="form-control" placeholder="{{  __('store_id') }} " value="{{  old('store_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="app_token_id" class="col-md-2 col-form-label">@lang('app_token_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="app_token_id" class="form-control" placeholder="{{  __('app_token_id') }} " value="{{  old('app_token_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="app_ref_id" class="col-md-2 col-form-label">@lang('app_ref_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="app_ref_id" class="form-control" placeholder="{{  __('app_ref_id') }} " value="{{  old('app_ref_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="fulfillment_id" class="col-md-2 col-form-label">@lang('fulfillment_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="fulfillment_id" class="form-control" placeholder="{{  __('fulfillment_id') }} " value="{{  old('fulfillment_id') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Orderdetail')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection