<template>
  <div :class="className" :style="{ height: height, width: width }" />
</template>

<script>
import echarts from 'echarts';
require('echarts/theme/macarons'); // echarts theme
import { debounce } from '@/utils';

const animationDuration = 6000;

export default {
  props: {
    className: {
      type: String,
      default: 'chart',
    },
    width: {
      type: String,
      default: '100%',
    },
    height: {
      type: String,
      default: '300px',
    },
  },
  data() {
    return {
      chart: null,
    };
  },
  mounted() {
    this.initChart();
    this.__resizeHandler = debounce(() => {
      if (this.chart) {
        this.chart.resize();
      }
    }, 100);
    window.addEventListener('resize', this.__resizeHandler);
  },
  beforeDestroy() {
    if (!this.chart) {
      return;
    }
    window.removeEventListener('resize', this.__resizeHandler);
    this.chart.dispose();
    this.chart = null;
  },
  methods: {
    initChart() {
      this.chart = echarts.init(this.$el, 'macarons');

      this.chart.setOption({
        tooltip: {
          trigger: 'axis',
          axisPointer: {
            // Axis indicator, axis trigger is valid
            type: 'shadow', // The default is a straight line, which can be selected as: 'line' | 'shadow'
          },
        },
        grid: {
          top: 10,
          left: '2%',
          right: '2%',
          bottom: '3%',
          containLabel: true,
        },
        xAxis: [
          {
            type: 'category',
            data: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sab', 'Dom'],
            axisTick: {
              alignWithLabel: true,
            },
          },
        ],
        yAxis: [
          {
            type: 'value',
            axisTick: {
              show: false,
            },
          },
        ],
        series: [
          {
            name: 'Mineria',
            type: 'bar',
            stack: 'vistors',
            barWidth: '60%',
            data: [79, 52, 200, 334, 390, 330, 220],
            animationDuration,
          },
          {
            name: 'Materia Prima',
            type: 'bar',
            stack: 'vistors',
            barWidth: '60%',
            data: [80, 52, 200, 334, 390, 330, 220],
            animationDuration,
          },
          {
            name: 'Ventas y Alquileres',
            type: 'bar',
            stack: 'vistors',
            barWidth: '60%',
            data: [30, 52, 200, 334, 390, 330, 220],
            animationDuration,
          },
          {
            name: 'Transporte Materia Prima',
            type: 'bar',
            stack: 'vistors',
            barWidth: '60%',
            data: [30, 52, 80, 80, 90, 90, 210],
            animationDuration,
          },
          {
            name: 'Transporte Productos',
            type: 'bar',
            stack: 'vistors',
            barWidth: '60%',
            data: [25, 40, 200, 334, 390, 330, 220],
            animationDuration,
          },
          {
            name: 'Servicios de  Construccion',
            type: 'bar',
            stack: 'vistors',
            barWidth: '60%',
            data: [28, 45, 150, 302, 305, 330, 220],
            animationDuration,
          },
        ],
      });
    },
  },
};
</script>
