<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css">
    <style type="text/css">body{padding-top: 40px;}</style>
</head>
<body>

<div id="root" class="container">

    <tabs>
        <tab name="About Us" :selected="true">
            <h1>Here is the content for the about us tab</h1>
        </tab>
        <tab name="About Our Culture ">
            <h1>Here is the content for the culture tab</h1>
        </tab>
        <tab name="About Our Vision">
            <h1>Here is the content for the vision tab</h1>
        </tab>
    </tabs>

</div>

<script src="https://unpkg.com/vue@2.5.16/dist/vue.js"></script>
<script>
    Vue.component('tabs',{
        template:`
    <div>
        <div class="tabs">
          <ul>
            <li v-for="tab in tabs" :class="{ 'is-active' : tab.isActive } ">
                <a :href="tab.href" @click="selectTab(tab)">@{{tab.name}}</a>
            </li>
          </ul>
        </div>


        <div class="tabs-details">

            <slot></slot>

        </div>
    </div>
        `,
        data(){
          return {tabs:[]}
        },

        created(){
            this.tabs = this.$children
        },

        methods:{
            selectTab(selectedTab){
                this.tabs.forEach(tab =>{

                    tab.isActive = (tab.name == selectedTab.name)
                    });
                }
            }
    })


    Vue.component('tab',{
        template:`
        <div v-show="isActive"><slot></slot></div>
        `,
        props:{
            name:{required: true},
            selected:{default:false}
        },

        data(){

            return{

                isActive : false

                }

            },
        computed:{

            href(){

                //  about-our-culture
                return '#'+ this.name.toLowerCase().replace(/ /g,'-');

            }
        },

        mounted(){
            this.isActive = this.selected
        }
    })

    var app = new Vue({

        el:'#root',

    })
</script>
</body>
</html>
