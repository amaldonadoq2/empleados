/** When your routing table is too long, you can split it into small modules**/
import Layout from '@/layout';

const adminRoutes = {
  path: '/administrador',
  component: Layout,
  redirect: '/administrador/users',
  name: 'Administrator',
  alwaysShow: true,
  meta: {
    title: 'administrator',
    icon: 'admin',
    permissions: ['ver menu administrador'],
  },
  children: [
    /** User managements */
    /* {
      path: 'users/edit/:id(\\d+)',
      component: () => import('@/views/users/UserProfile'),
      name: 'UserProfile',
      meta: {
        title: 'userProfile',
        noCache: true,
        permissions: ['manage user'],
      },
      hidden: true,
    }, */
    {
      path: 'users',
      component: () => import('@/views/users/List'),
      name: 'UserList',
      meta: { title: 'users', icon: 'user', permissions: ['manage user'] },
    },
    /** Role and permission */
    {
      path: 'roles',
      component: () => import('@/views/role-permission/List'),
      name: 'RoleList',
      meta: {
        title: 'rolePermission',
        icon: 'role',
        permissions: ['manage permission'],
      },
    },
  ],
};

export default adminRoutes;
