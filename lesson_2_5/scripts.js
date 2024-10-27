let user = {
    name: "John Doe",
    age: 25,
    email: "john.doe@example.com",
   };

console.log(user);

user.age = 30;
user.isAdmin = true;

console.log(user);

// delete user.email;

console.log(user);

function transformUser(user) {
    const transformedUser = {
      name: user.name.toUpperCase(),
      email: user.email,
    };
    return transformedUser;
  }
  
let transformedUser = transformUser(user);
console.log(transformedUser);
  
let userCopy = { ...user };
userCopy.name = "Jane Doe";
  
console.log(user);
console.log(userCopy);

function filterProperties(obj, keys) {
    const filteredObj = {};
  
    keys.forEach(key => {
      if (key in obj) {
        filteredObj[key] = obj[key];
      }
    });
  
    return filteredObj;
  }

  
let filteredUser = filterProperties(user, ["name", "email"]);
console.log(filteredUser);

function convertUser(user) {
    const convertedUser = {};
  
    convertedUser.email = user.email;
    convertedUser.isAdmin = user.isAdmin;
  
    convertedUser.profile = {
      name: user.name,
      age: user.age,
    };
  
    return convertedUser;
  }

  
let convertedUser = convertUser(user);
console.log(convertedUser);

let user1 = {
    name: "John Doe",
    email: "john.doe@example.com",
  };
  
let details = {
    age: 30,
    isAdmin: true,
 };
  

let mergedUser = Object.assign({}, user1, details);
  
console.log(mergedUser);

let key1 = "name";
let key2 = "price";
let key3 = "category";

let product = {};

product[key1] = "Laptop";
product[key2] = 1500;
product[key3] = "Electronics";

console.log(product);
