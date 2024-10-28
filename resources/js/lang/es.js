export default {
  route: {
    dashboard: 'Dashboard',
    introduction: 'Intruducción',
    documentation: 'Documentación',
    guide: 'Guía',
    permission: 'Permiso',
    pagePermission: 'Permiso de página',
    rolePermission: 'Permiso de rol',
    directivePermission: 'Directivas',
    icons: 'Iconos',
    components: 'Componentes',
    componentIndex: 'Introducción',
    tinymce: 'Tinymce',
    markdown: 'Markdown',
    jsonEditor: 'Editor JSON',
    dndList: 'Lista DND',
    splitPane: 'Panel Dividido',
    avatarUpload: 'Subir Avatar',
    dropzone: 'Dropzone',
    sticky: 'Sticky',
    countTo: 'Contar Hasta',
    componentMixin: 'Mixin',
    backToTop: 'Volver al principio',
    dragDialog: 'Dialogo de arrastre',
    dragSelect: 'Arrastrar Seleccionar',
    dragKanban: 'Arrastrar Kanban',
    charts: 'Gráficos',
    keyboardChart: 'Tabla de teclado',
    lineChart: 'Gráfico de linea',
    mixChart: 'Gráfico de mezcla',
    example: 'Ejemplo',
    nested: 'Rutas Anidadas',
    menu1: 'Menu 1',
    'menu1-1': 'Menu 1-1',
    'menu1-2': 'Menu 1-2',
    'menu1-2-1': 'Menu 1-2-1',
    'menu1-2-2': 'Menu 1-2-2',
    'menu1-3': 'Menu 1-3',
    menu2: 'Menu 2',
    table: 'Tabla',
    dynamicTable: 'Tabla Dinamica',
    dragTable: 'Arrastrar Tabla',
    inlineEditTable: 'Edicion en linea',
    complexTable: 'Tabla Compleja',
    treeTable: 'Tabla de arbol',
    customTreeTable: 'Tabla de arbol personalizada',
    tab: 'Pestaña',
    form: 'Formulario',
    createArticle: 'Crear articulo',
    editArticle: 'Editar articulo',
    articleList: 'Articulos',
    errorPages: 'Error de pagina',
    page401: '401',
    page404: '404',
    errorLog: 'Registro de errores',
    excel: 'Excel',
    exportExcel: 'Exportar Excel',
    selectExcel: 'Exportar Seleccionado',
    mergeHeader: 'Combinar encabezado',
    uploadExcel: 'Subir Excel',
    zip: 'Zip',
    pdf: 'PDF',
    exportZip: 'Exportar Zip',
    theme: 'Tema',
    clipboardDemo: 'Portapapeles',
    i18n: 'I18n',
    externalLink: 'Enlace externo',
    elementUi: 'Element UI',
    administrator: 'Administrador',
    users: 'Usuarios',
    userProfile: 'Perfil de usuario',
    multas: 'Multas',
  },
  navbar: {
    logOut: 'Cerrar Sesión',
    dashboard: 'Dashboard',
    github: 'Github',
    theme: 'Tema',
    size: 'Tamaño global',
    profile: 'Perfil',
  },
  login: {
    title: 'Iniciar sesión',
    logIn: 'Ingresar',
    username: 'Usuario',
    password: 'Contraseña',
    any: 'Cualquiera',
    thirdparty: 'O conectarse con',
    thirdpartyTips:
      ' No se puede simular en local, ¡así que combine su propia simulación comercial ! ! !',
    email: 'Correo electrónico',
  },
  documentation: {
    documentation: 'Documentacion',
    laravel: 'Laravel',
    github: 'Repositorio de github',
  },
  permission: {
    addRole: 'Nuevo rol',
    editPermission: 'Editar permiso',
    roles: 'Tus roles',
    switchRoles: 'Cambiar roles',
    tips: 'En algunos casos, no es adecuado usar v-role/v-permission, como el componente Tab del elemento o el-table-column y otros casos de dom de representación asincrónica que solo se pueden lograr configurando manualmente el v-if con checkRole o/y checkPermission',
    delete: 'Eliminar',
    confirm: 'Confirmar',
    cancel: 'Cancelar',
  },
  guide: {
    description:
      'La página de la guía es útil para algunas personas que ingresaron al proyecto por primera vez. Puede presentar brevemente las características del proyecto. La demostración se basa en',
    button: 'Mostrar guia',
  },
  components: {
    documentation: 'Documentación',
    tinymceTips:
      'El editor de texto enriquecido es una parte central del sistema de gestión, pero al mismo tiempo es un lugar con muchos problemas. En el proceso de selección de textos ricos, también caminé muchos desvíos. Básicamente se utilizan los editores de texto enriquecido comunes en el mercado, y finalmente se eligió Tinymce. Consulte la documentación para obtener comparaciones e introducciones más detalladas del editor de texto enriquecido.',
    dropzoneTips:
      'Debido a que mi negocio tiene necesidades especiales y tiene que subir imágenes a qiniu, entonces, en lugar de un tercero, elegí encapsularlo yo mismo. Es muy simple, puedes ver el código detallado en @/components/Dropzone.',
    stickyTips:
      'cuando la página se desplaza a la posición preestablecida, se pegará en la parte superior.',
    backToTopTips1:
      'Cuando la página se desplaza a la posición especificada, el botón Volver al principio aparece en la esquina inferior derecha',
    backToTopTips2:
      'Puedes personalizar el estilo del botón, mostrar/ocultar, altura de aparición, altura del retorno. Si necesita un mensaje de texto, puede usar los elementos de información sobre herramientas de element-ui de forma externa',
    imageUploadTips:
      'Como estaba usando solo la versión vue@1, y no es compatible con mockjs por el momento, la modifiqué yo mismo, y si la vas a usar, es mejor que uses la versión oficial.',
  },
  table: {
    description: 'Descripción',
    dynamicTips1: 'Encabezado fijo, ordenado por orden de encabezado',
    dynamicTips2: 'Encabezado fijo, ordenado por orden de encabezado',
    dragTips1: 'Encabezado fijo, ordenado por orden de encabezado',
    dragTips2: 'Encabezado fijo, ordenado por orden de encabezado',
    name: 'Nombre',
    title: 'Titulo',
    importance: 'Importancia',
    type: 'Tipo',
    remark: 'Observacion',
    search: 'Búsqueda',
    add: 'Agregar',
    export: 'Exportar',
    reviewer: 'Critico',
    id: 'ID',
    date: 'Fecha',
    author: 'Autor',
    readings: 'Lecturas',
    status: 'Estado',
    actions: 'Actiones',
    edit: 'Editar',
    publish: 'Publicar',
    draft: 'Reclutar',
    delete: 'Eliminar',
    cancel: 'Cancelar',
    confirm: 'Confirmar',
    keyword: 'Escribir',
    role: 'Role',
  },
  errorLog: {
    tips: 'Haga clic en el icono de error en la esquina superior derecha',
    description:
      'Ahora el sistema de gestión es básicamente la forma del spa, mejora la experiencia del usuario, pero también aumenta la posibilidad de problemas en la página, una pequeña negligencia puede llevar a un punto muerto en toda la página. Afortunadamente, Vue proporciona una forma de detectar el manejo de excepciones, donde puede manejar errores o informar excepciones.',
    documentation: 'Introducción al documento',
  },
  excel: {
    export: 'Exportar',
    selectedExport: 'Exportar elementos seleccionados',
    placeholder:
      'Ingrese el nombre del archivo (lista de Excel predeterminada)',
  },
  zip: {
    export: 'Exportar',
    placeholder: 'Ingrese el nombre del archivo (archivo predeterminado)',
  },
  pdf: {
    tips: 'Aquí usamos window.print() para implementar la función de descargar pdf.',
  },
  theme: {
    change: 'Cambiar tema',
    documentation: 'Documentación del tema',
    tips: 'Consejos: es diferente de la selección de tema en la barra de navegación, hay dos métodos de desollado diferentes, cada uno con diferentes escenarios de aplicación. Consulte la documentación para obtener más detalles.',
  },
  tagsView: {
    refresh: 'Actualizar',
    close: 'Cerrado',
    closeOthers: 'Cerrar otros',
    closeAll: 'Cerrar todo',
  },
  settings: {
    title: 'Configuración de estilo de página',
    theme: 'Color del tema',
    tagsView: 'Abrir vista de etiquetas',
    fixedHeader: 'Encabezado fijo',
    sidebarLogo: 'Logotipo de la barra lateral',
  },
  user: {
    role: 'Rol',
    password: 'Contraseña',
    confirmPassword: 'Confirmar contraseña',
    name: 'Nombre',
    email: 'Correo electrónico',
  },
  roles: {
    description: {
      admin:
        'Superadministrador. Tener acceso y permiso completo a todas las páginas.',
      manager:
        'Gerente. Tener acceso y permiso a la mayoría de las páginas, excepto a la página de permisos.',
      editor:
        'Editor. Tener acceso a la mayoría de las páginas, permiso completo con artículos y recursos relacionados.',
      user: 'Usuario normal. Tener acceso a algunas páginas',
      visitor:
        'Visitante. Tener acceso a páginas estáticas, no debe tener ningún permiso de escritura',
    },
  },
};