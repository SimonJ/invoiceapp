@extends('spark::layouts.app')

@section('content')
    <clients inline-template>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create new client
                        </div><!-- panel-heading -->
                        <div class="panel-body">

                            <div class="alert alert-success" v-if="form.successful">
                                <button type="button" class="close" data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                                Your client has been created!
                            </div><!-- alert -->

                            <form>
                                <div class="form-group" :class="{'has-error': form.errors.has('company')}">
                                    <label class="control-label" for="company">Company
                                        <small class="text-info">required</small>
                                    </label>
                                    <input type="text" class="form-control" name="company" id="company" v-model="form.company" placeholder="Insert company name">
                                    <span class="help-block" v-show="form.errors.has('company')">
                                        @{{ form.errors.get('company') }}
                                    </span>
                                </div><!-- form-group -->

                                <div class="form-group" :class="{'has-error': form.errors.has('contact_person')}">
                                    <label class="control-label" for="contact_person">Contact person</label>
                                    <input type="text" class="form-control" name="contact_person" id="contact_person" v-model="form.contact_person" placeholder="Insert contact person">
                                    <span class="help-block" v-show="form.errors.has('contact_person')">
                                        @{{ form.errors.get('contact_person') }}
                                    </span>
                                </div><!-- form-group -->

                                <div class="form-group" :class="{'has-error': form.errors.has('email')}">
                                    <label class="control-label" for="email">Email
                                        <small class="text-info">required</small>
                                    </label>
                                    <input type="email" class="form-control" name="email" id="email" v-model="form.email" placeholder="john@doe.com">
                                    <span class="help-block" v-show="form.errors.has('email')">
                                        @{{ form.errors.get('email') }}
                                    </span>
                                </div><!-- form-group -->

                                <div class="form-group" :class="{'has-error': form.errors.has('address1')}">
                                    <label class="control-label" for="address1">Address 1</label>
                                    <input type="text" class="form-control" name="address1" id="address1" v-model="form.address1" placeholder="Insert address 1">
                                    <span class="help-block" v-show="form.errors.has('address1')">
                                        @{{ form.errors.get('address1') }}
                                    </span>
                                </div><!-- form-group -->

                                <div class="form-group" :class="{'has-error': form.errors.has('address2')}">
                                    <label class="control-label" for="address">Address 2</label>
                                    <input type="text" class="form-control" name="address2" id="address2" v-model="form.address2" placeholder="Insert address 2">
                                    <span class="help-block" v-show="form.errors.has('address2')">
                                        @{{ form.errors.get('address2') }}
                                    </span>
                                </div><!-- form-group -->

                                <div class="form-group" :class="{'has-error': form.errors.has('city')}">
                                    <label class="control-label" for="city">City</label>
                                    <input type="text" class="form-control" name="city" id="city" v-model="form.city" placeholder="Insert city">
                                    <span class="help-block" v-show="form.errors.has('city')">
                                        @{{ form.errors.get('city') }}
                                    </span>
                                </div><!-- form-group -->

                                <div class="form-group" :class="{'has-error': form.errors.has('state')}">
                                    <label class="control-label" for="state">State</label>
                                    <input type="text" class="form-control" name="state" id="state" v-model="form.state" placeholder="Insert state">
                                    <span class="help-block" v-show="form.errors.has('state')">
                                        @{{ form.errors.get('state') }}
                                    </span>
                                </div><!-- form-group -->

                                <div class="form-group" :class="{'has-error': form.errors.has('zipcode')}">
                                    <label class="control-label" for="zipcode">Zip code</label>
                                    <input type="number" class="form-control" name="zipcode" id="zipcode" v-model="form.zipcode" placeholder="Insert zip code">
                                    <span class="help-block" v-show="form.errors.has('zipcode')">
                                        @{{ form.errors.get('zipcode') }}
                                    </span>
                                </div><!-- form-group -->

                                <div class="form-group" :class="{'has-error': form.errors.has('country')}">
                                    <label class="control-label" for="country">Country</label>
                                    <input type="text" class="form-control" name="country" id="country" v-model="form.country" placeholder="Insert country">
                                    <span class="help-block" v-show="form.errors.has('country')">
                                        @{{ form.errors.get('country') }}
                                    </span>
                                </div><!-- form-group -->

                                <button type="submit" class="btn btn-primary" @click.prevent="create" :disabled="form.busy">
                                    Create
                                </button>
                            </form>
                        </div><!-- panel-body -->
                    </div><!-- panel -->

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </clients>
@endsection
