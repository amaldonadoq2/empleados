import Layout from '@/layout';

const tableRoutes = {
  path: '/empleados',
  component: Layout,
  redirect: '/empleados/index',
  name: 'empleados',
  meta: {
    title: 'Multas',
    icon: 'table',
    permissions: ['view menu table'],
  },
  children: [
    {
      path: 'index',
      component: () => import('@/views/empleados/tabla'),
      name: 'Empleados',
      meta: { title: 'Empleados' },
    },
  ],
};
export default tableRoutes;
