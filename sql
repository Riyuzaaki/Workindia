
    
 CREATE TABLE users(
    agentid int(256) not null PRIMARY KEY AUTO_INCREMENT,
    userpwd varchar(256) not null
);

   
 CREATE TABLE todo(
    todoid int(255) not null PRIMARY KEY AUTO_INCREMENT,
    agentid int(255) not null,
    todohead varchar(256) not null,
    todo varchar(256) not null,
    duedate date not null,
    Category varchar(256) not null
);

agentid, todohead, todo, duedate


 agent_id, TODO Title, TODO Description, Category, Due Date