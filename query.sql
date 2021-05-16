use testleadingdb;

select users.id,
       users.login,
       users.password,
       users.object_id,
       objects.`name`,
       objects.`status`
from testleadingdb.users
         join objects on object_id = objects.id
;