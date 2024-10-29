import Layout from '@/layout';

const tableRoutes = {
  path: '/empresas',
  component: Layout,
  redirect: '/empresas/index',
  name: 'empresas',
  meta: {
    title: 'Empresas',
    icon: 'table',
    permissions: ['view menu table'],
  },
  children: [
    {
      path: 'index',
      component: () => import('@/views/empresas/tabla'),
      name: 'Empresas',
      meta: { title: 'Empresas' },
    },
  ],
};
export default tableRoutes;
