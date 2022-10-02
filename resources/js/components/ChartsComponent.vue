<template>
    <div>
        <div class="row justify-content-evenly my-auto">
            <div class="col-12 col-md-4 ">
                <BarChartMessages v-if="loaded" :chart-data="chartData" :label="label"></BarChartMessages>
            </div>
            <div class="col-12 col-md-4">
                <BarChartReviews v-if="loaded" :chart-data-reviews="chartDataReviews" :label-reviews="labelReviews"></BarChartReviews>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import BarChartMessages from './BarChartMessages.vue'
    import BarChartReviews from './BarChartReviews.vue'
    

    export default {
        
        components: { BarChartMessages ,  BarChartReviews},
        
        data(){
            return{
                dataReviews : [],
                labelReviews : 'Recensioni',
                chartDataReviews : {},
                loaded: false,
                data:[],
                months: [],
                monthCount: [],
                label : 'Messaggi',
                chartData : {}
                
            }
        },
        mounted(){
            axios.get("/api/doctor/stats/messages")
            .then((resp) => {
                    this.loaded = false
                    this.data = resp.data
                    this.months = this.data.month
                    this.monthCount = this.data.monthcount
                    this.chartData = {
                        labels : this.data.month,
                        datasets : [{
                            data: this.data.monthcount,
                            label: this.label,
                            backgroundColor : 'red', 
                        }]
                    }

                    this.loaded = true
                });
                axios.get("/api/doctor/stats/reviews")
                .then((resp) => {
                    this.loaded = false
                    this.dataReviews = resp.data
                    this.chartDataReviews = {
                        labels : this.dataReviews.month,
                        datasets : [{
                            data: this.dataReviews.monthcount,
                            label: this.labelReviews,
                            backgroundColor : 'blue', 
                        }]
                    }

                    this.loaded = true
                });
        }
    }
</script>
