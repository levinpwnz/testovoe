import SectionList from "../components/pages/section/SectionList";
import UserList from "../components/pages/user/UserList";
import UserPreview from "../components/pages/user/UserPreview";
import UserNew from "../components/pages/user/UserNew";

const Index = () => import('../components/pages/Index');

export const routes = [
    {
        path: '/',
        name: 'index',
        component: Index
    },

    {
        path: '/section',
        name: 'section',
        component: SectionList
    },

    {
        path: '/user',
        name: 'user',
        component: UserList,
    },
    {
        path: '/user/new',
        name: 'userNew',
        component: UserNew,
    },


    {
        path: '/user/:id',
        name: 'userPreview',
        component: UserPreview
    }

];
