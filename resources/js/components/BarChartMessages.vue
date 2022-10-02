<template>
    <Bar
    :chart-options="chartOptions"
    :chart-data="chartData"
    :chart-id="chartId"
    :dataset-id-key="datasetIdKey"
    :css-classes="cssClasses"
    :width="width"
    :height="height"  
     ></Bar>
</template>

<script>
import { Bar } from 'vue-chartjs/legacy'
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'
ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)

export default {
    name: 'BarChart',
  components: { Bar },
  props: {
    chartData :{
        type: Object,
        required: true
      },
    label:{
        type: String
    },
    chartOptions: {
        responsive: true
    },
    chartId: {
      type: String,
      default: 'Bar-chart'
    },
    datasetIdKey: {
      type: String,
      default: 'label'
    },
    width: {
      type: Number,
      default: 400
    },
    height: {
      type: Number,
      default: 400
    },
    cssClasses: {
      default: '',
      type: String, 
      
    },
    
  },
  data(){
    return{
        
    }
  }
}
</script>

<style>

</style>