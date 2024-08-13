import { user } from "./user";

user.then((me) => {
  if (me) location = "/";
});
