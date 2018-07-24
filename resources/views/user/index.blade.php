<!DOCTYPE html>
<html>
<head>
    <title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css">
<style type="text/css">body{padding-top: 40px;}</style>
</head>
<body>

<div id="root" class="container">


    {{--<p>The value of the input is : @{{ message }}</p>--}}

    {{--<ul>--}}

    {{--<li v-for="name in names" v-text="name"></li>--}}

    {{--<hr>--}}

    {{--<li v-for="name in names">@{{ name }}</li>--}}

    {{--</ul>--}}
    {{--<input id="input" type="text" v-model="newName">--}}
    {{--<button id="button">Add name</button>--}}

    {{--short option event listener--}}
    {{--<button v-on:click="addName" >Add name</button>--}}
    {{--<button @click="addName" >Add name</button>--}}

    {{--<button v-bind:title="title">Hover Over Me</button>--}}

    {{--<h1 :class="className">Hello World</h1>--}}
    {{--<button :class="{ 'is-loading' : isLoading }" @click="toggleClass">Toggle me</button>--}}
    {{--<h1>--}}
    {{--@{{message.split('').reverse().join('')}}--}}
    {{--@{{reversedMessage}}--}}
    {{--</h1>--}}
    {{-- <h1>All tasks</h1>
     <ul>
         <li v-for="task in tasks" v-text="task.description"> </li>
     </ul>
     <h1>Incomplete tasks</h1>
     --}}{{--<ul>--}}{{--
         --}}{{--<li v-for="task in tasks" v-if="!task.completed" v-text="task.description"> </li>--}}{{--
     --}}{{--</ul>--}}{{--
     <ul>
         <li v-for="task in incompleteTasks" v-text="task.description"> </li>
     </ul>--}}

    {{--<task>Go to the store</task>--}}
    {{--<task>Finish screencast</task>--}}
    {{--<task-list></task-list>--}}
    {{--<message title="Hello World" body="Lorem ipsum dolor sit amet."></message>--}}
    {{--<message title="Hello Universe" body="Bla bla."></message>--}}
    {{--<modal v-if="showModal" @close="showModal = false">--}}
        {{--<p>We insert any text here.</p>--}}
    {{--</modal>--}}
    {{--<button @click="showModal = true ">Show modal</button>--}}
</div>

{{--<script src="/resources/assets/js/main.js"></script>--}}
<script src="https://unpkg.com/vue@2.5.16/dist/vue.js"></script>
<script>
// var app = new Vue({
//     el:'#root',
//
//     data:{
//         newName: '',
//
//         names:['Jakob','Ara','Margarita']
//
//     },
//
//     methods:{
        //         addName(){
        //             this.names.push(this.newName)
        //
        //             this.newName = ''
        //         }
        //     }
        //     // long option event listener
        //     // mounted(){
        //     //     document.querySelector('#button').addEventListener('click', () => {
        //     //
        //     //         let name = document.querySelector('#input');
        //     //
        //     //         app.names.push(name.value);
        //     //
        //     //         name.value = '';
        //     //
        //     //     })
        //     // }
        // });
// Vue.component('message',{
//
//     props:['title','body'],
//
//     data(){
//         return{
//             isVisible:true
//         }
//     },
//
//     template:`
//
//             <article class="message" v-show="isVisible">
//
//                 <div class="message-header">
//
//                     @{{title}}
//
//                     <button type="button" @click="isVisible = false" class="delete" aria-label="delete"></button>
//
//                 </div>
//
//                 <div class="message-body">
//
//                     @{{body}}
//
//                 </div>
//
//             </article>
//
//         `,
//     methods:{
//         hideModal(){
//         // this.isVisible = false;
//         }
//     }
//
// })
Vue.component('modal',{

    data(){
        return{
            isVisible:true
        }
    },

    template:`

            <div class="modal is-active">

                <div class="modal-background"></div>

                <div class="modal-content">

                    <div class="box">

                    <slot></slot>

                    </div>

                </div>

                <button class="modal-close is-large" @click="$emit('close')" aria-label="close"></button>

            </div>

        `,
    methods:{
        hideModal(){
        // this.isVisible = false;
        }
    }

})
        var app = new Vue({

            el:'#root',
            //
            // data:{
            //     title:'Now the title is being through JavaScript.'
            //
            // },
            // data:{
            //     className:'color-red',
            // },
            // data:{
            //     isLoading: false
            // },
            //
            // methods:{
            //     toggleClass(){
            //         this.isLoading = true
            //     }
            // }
            //
            // data:{
            //     message:'Hello World'
            // },
            // computed:{
            //     reversedMessage(){
            //         return this.message.split('').reverse().join('');
            //     }
            // }

         /*   data:{
                tasks :[
                    {description:'Go to the store',completed:true},

                    {description:'Finish screencast',completed:false},

                    {description:'Make donation',completed:false},

                    {description:'Clear inbox',completed:false},

                    {description:'Make dinner',completed:false},

                    {description:'Clean room',completed:true},

                ]
            },

            computed: {

                incompleteTasks(){

                    return this.tasks.filter(task => !task.completed)

                }
            }*/
         data:{
             showModal:false
         }

        });

        {{--Vue.component('task-list',{--}}

            {{--template:'<div><task v-for="task in tasks">{{task}}</task></div>',--}}

            {{--data(){--}}

                {{--return {--}}

                    {{--tasks :[--}}
                        {{--{task:'Go to the store',complete:true},--}}

                        {{--{task:'Finish screencast',complete:false},--}}

                        {{--{task:'Make donation',complete:false},--}}

                        {{--{task:'Clear inbox',complete:false},--}}

                        {{--{task:'Make dinner',complete:false},--}}

                        {{--{task:'Clean room',complete:true},--}}

                    {{--]--}}
                {{--};--}}
            {{--}--}}

        {{--});--}}

        {{--Vue.component('task',{--}}


            {{--template:'<li><slot></slot></li>'--}}

        {{--});--}}

        {{--new Vue({--}}
            {{--el:'#root'--}}
        {{--})--}}

    </script>
</body>
</html>
