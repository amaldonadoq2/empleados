<template>
  <div :class="className" :style="{ height: height, width: width }" />
</template>

<script>
import echarts from 'echarts';
require('echarts/theme/macarons'); // echarts theme
import { debounce } from '@/utils';

const animationDuration = 3000;

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
            type: 'shadow',
          },
        },
        radar: {
          radius: '66%',
          center: ['50%', '42%'],
          splitNumber: 8,
          splitArea: {
            areaStyle: {
              color: 'rgba(127,95,132,.3)',
              opacity: 1,
              shadowBlur: 45,
              shadowColor: 'rgba(0,0,0,.5)',
              shadowOffsetX: 0,
              shadowOffsetY: 15,
            },
          },
          indicator: [
            { name: 'Nomina de empleados', max: 50000 },
            { name: 'Prestamos', max: 30000 },
            { name: 'Salarios', max: 40000 },
            { name: 'Permisos', max: 10000 },
          ],
        },
        legend: {
          left: 'center',
          bottom: '10',
          data: ['Nomina de empleados', 'Prestamos', 'Salarios', 'Permisos'],
        },
        series: [
          {
            type: 'radar',
            symbolSize: 0,
            areaStyle: {
              normal: {
                shadowBlur: 13,
                shadowColor: 'rgba(0,0,0,.2)',
                shadowOffsetX: 0,
                shadowOffsetY: 10,
                opacity: 1,
              },
            },
            data: [
              {
                value: [45000, 20000, 35000, 8000],
                name: 'Presupuesto asignado',
              },
              {
                value: [40000, 25000, 30000, 9000],
                name: 'Gasto esperado',
              },
              {
                value: [42000, 22000, 32000, 8500],
                name: 'Gasto real',
              },
            ],
            animationDuration: animationDuration,
          },
        ],
      });
    },
  },
};
</script>
