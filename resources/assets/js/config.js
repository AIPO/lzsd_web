var api_url = '';

switch (process.env.NODE_ENV) {
    case 'development':
        api_url = 'https://127.0.0.1/api';
        break;
    case 'production':
        api_url = '';
        break;
}
export const POST_CONFIG = {
    API_URL: api_url,
}