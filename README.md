# Commands

### Lighthouse
composer require nuwave/lighthouse

### Ide-helper
composer require --dev barryvdh/laravel-ide-helper

### Schema
php artisan vendor:publish --tag=lighthouse-schema

### Ide-helper
php artisan lighthouse:ide-helper

### Open schema, see errors
sed -i '' 's/repeatable//g' schema-directives.graphql

Remove @paginate and user() query
Add @add directive!!

### Uncomment databaseseeder
php artisan migrate:fresh —seed

### Playground
composer require mll-lab/laravel-graphql-playground

### Serve application
php artisan serve

### Visit playground
http://127.0.0.1:8000/graphql-playground

Query users

### MUTATIONS
### Make mutation in schema
type Mutation {
    updateUser(
        id: ID!
        name: String!
    ): User!
}

### Make mutation
php artisan lighthouse:mutation UpdateUser

        $user = User::findOrFail($args['id']);
        $user->update([
            'name' => $args['name'],
        ]);

        return $user;

### Show mutation works

### Subscriptions:

### Add serviceprovider
\Nuwave\Lighthouse\Subscriptions\SubscriptionServiceProvider::class,

### Install pusher
composer require pusher/pusher-php-server

### Go to Pusher
https://dashboard.pusher.com/

Show App keys
Add them to .env
Go to Debug console

### Write the Subscription type
type Subscription {
    userUpdated: User
}

### Add @broadcast directive to mutation
@broadcast(subscription: "userUpdated")

php artisan lighthouse:ide-helper
sed -i '' 's/repeatable//g' schema-directives.graphql

### Write the Subscription class
    public function authorize(Subscriber $subscriber, Request $request): bool
    {
        return true;
    }

    public function filter(Subscriber $subscriber, $root): bool
    {
        return true;
    }

### Allow CORS
### cors.php
'paths' => ['api/*', 'sanctum/csrf-cookie', 'graphql', 'graphql/subscriptions/auth'],

### Let the queue run:
### art queue:work
