@extends('layout', [
                'page_title'  => "CMS Page creation",
                'page_header' => "CMS Page creation"
                ])

@section('html_header')
    <!--suppress ALL -->
<script type="text/javascript" src="/js/vue.js" xmlns:v-on="http://www.w3.org/1999/xhtml"></script>
@stop

@section('content')
    @if ( ! \LaravelExamples\cmsTemplate::count() )
        @include('partials.modal_input_message')
        <!-- app -->
        <div id="app">

            {{--<button id="show-modal" @click="showModal = true">Show Modal</button>--}}
            <!-- use the modal component, pass in the prop -->
            <modal :show.sync="showModal">
                <form action="#" slot="body" @submit.prevent="createTemplate">
                    <p>Before creating a page or article
                    you will need a template to attach
                    the page. A page also needs to exists before creating articles</p>
                    <div class="input-group group-field">
                        <label class="input-group-addon flyer-label" for="template">
                            <i class="fa fa-columns"></i>
                        </label>
                        <input type="text" name="template" id="template" class="form-control"
                               placeholder="Enter a template name. no extension required">
                    </div> {{-- Template --}}

                    <div slot="footer" class="form-group" style="text-align: right">
                        <button class="btn btn-danger"
                        @click.stop="createTemplate('canceled')">
                        Cancel
                        </button>

                        <button class="btn btn-primary"
                        @click.prevent="createTemplate('submit')">
                        Create Template
                        </button>
                    </div>

                </form>
                <div slot="header">
                    <img src="/img/cms/template.png">
                    <h3>There is no template defined</h3>
                </div>
            </modal>
        </div>
    @else
        something in table
    @endif

@stop

@section('scripts')
<script>
    // register modal component
    Vue.component('modal', {
        template: '#modal-template',
        props: {
            show: {
                type: Boolean,
                required: true,
                twoWay: true
            }
        }
    });

    // start app
    new Vue({
        el: '#app',
        data: {
            showModal: true,
            template: ''
        },
        methods: {
            createTemplate: function(msg, event) {
                if (msg=='canceled') {
//                    document.write('Closing...');
//                    $('#app').removeClass('active');
//                    $('#app').modal('toggle');
                    $('#app').modal('hide');

                } else if (msg=='submit') {

                    alert('submitted: ');
                }
            },
            close: function(e) {
                e.preventDefault();
                $('#app').removeClass('active');
            }
        }

    })
</script>
@stop
