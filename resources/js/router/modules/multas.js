import Layout from '@/layout';

const tableRoutes = {
  path: '/multas',
  component: Layout,
  redirect: '/multas/index',
  name: 'multas',
  meta: {
    title: 'Multas',
    icon: 'table',
    permissions: ['view menu table'],
  },
  children: [
    {
      path: 'index',
      component: () => import('@/views/multas/tabla'),
      name: 'Multas',
      meta: { title: 'Multas' },
    },
  ],
};
export default tableRoutes;
