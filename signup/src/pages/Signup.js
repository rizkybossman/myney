import { useState } from "react";
import {
  TextField,
  InputAdornment,
  Icon,
  IconButton,
  Button,
} from "@mui/material";
import "./Signup.css";

const Signup = () => {
  const [showPassword, setShowPassword] = useState(false);
  const handleShowPasswordClick = () => {
    setShowPassword(!showPassword);
  };
  return (
    <div className="signup">
      <div className="page-content">
        <div className="section-text">
          <div className="top">
            <b className="caption">Caption</b>
            <b className="main-headline">Lorem ipsum dolor sit amet.</b>
            <h1 className="secondary-headline">Sign Up</h1>
          </div>
          <div className="paragraph">{`4 day fee access to unlimited resources `}</div>
        </div>
        <div className="form-5-fields-checkbox-b">
          <div className="fields-group">
            <div className="text-field">
              <div className="label-and-field">
                <div className="label">First Name</div>
                <TextField
                  className="field"
                  color="success"
                  label="Placeholder"
                  required={true}
                  error={true}
                  variant="filled"
                />
              </div>
              <div className="description">Helper text goes here</div>
            </div>
            <div className="text-field">
              <div className="label-and-field">
                <div className="label">Last Name</div>
                <TextField
                  className="field"
                  color="success"
                  label="Placeholder"
                  required={true}
                  error={true}
                  variant="filled"
                />
              </div>
              <div className="description">Helper text goes here</div>
            </div>
          </div>
          <div className="text-field2">
            <div className="label-and-field">
              <div className="label">Email</div>
              <TextField
                className="field"
                color="success"
                label="Placeholder"
                required={true}
                error={true}
                variant="filled"
                type="email"
              />
            </div>
            <div className="description">Helper text goes here</div>
          </div>
          <div className="text-field2">
            <div className="label-and-field">
              <div className="label">Password</div>
              <TextField
                className="field"
                color="success"
                label="Placeholder"
                required={true}
                variant="filled"
                type={showPassword ? "text" : "password"}
                InputProps={{
                  endAdornment: (
                    <InputAdornment position="end">
                      <IconButton
                        onClick={handleShowPasswordClick}
                        aria-label="toggle password visibility"
                      >
                        <Icon>
                          {showPassword ? "visibility_off" : "visibility"}
                        </Icon>
                      </IconButton>
                    </InputAdornment>
                  ),
                }}
              />
            </div>
            <div className="description">Helper text goes here</div>
          </div>
          <div className="text-field4">
            <div className="label-and-field">
              <div className="label">Label Name</div>
              <div className="field4">
                <img
                  className="icon-jam-icons-outline-l"
                  alt=""
                  src="/icon--jamicons--outline--logos--search.svg"
                />
                <div className="text">Placeholder</div>
                <img
                  className="icon-jam-icons-outline-l1"
                  alt=""
                  src="/icon--jamicons--outline--logos--search.svg"
                />
              </div>
            </div>
            <div className="description">Helper text goes here</div>
          </div>
          <div className="controls-with-label">
            <div className="controls">
              <div className="union-wrapper">
                <img
                  className="union-icon"
                  alt=""
                  src="/icon--jamicons--outline--logos--search.svg"
                />
              </div>
            </div>
            <div className="label-name">
              Vestibulum faucibus odio vitae arcu auctor lectus.
            </div>
          </div>
          <div className="buttons-group">
            <div className="button">
              <img
                className="icon-jam-icons-outline-l2"
                alt=""
                src="/icon--jamicons--outline--logos--search.svg"
              />
              <div className="text-container">
                <div className="button-text">Button Text</div>
              </div>
              <img
                className="icon-jam-icons-outline-l3"
                alt=""
                src="/icon--jamicons--outline--logos--search.svg"
              />
              <div className="badge">
                <div className="label-name">9</div>
              </div>
            </div>
            <Button
              className="button1"
              color="primary"
              variant="contained"
              href="/login"
            >
              Sign Up
            </Button>
          </div>
        </div>
        <div className="paragraph-parent">
          <div className="label">Or sign up with:</div>
          <div className="login-with">
            <button className="button2">
              <img
                className="icon-jam-icons-outline-l1"
                alt=""
                src="/icon--jamicons--outline--logos--google.svg"
              />
              <div className="text-container1">
                <div className="button-text1">Google</div>
              </div>
              <img
                className="icon-jam-icons-outline-l"
                alt=""
                src="/icon--jamicons--outline--logos--search.svg"
              />
            </button>
          </div>
        </div>
        <div className="sep" />
        <Button
          className="already-have-an"
          color="success"
          variant="text"
          href="/login"
        >
          Already have an account?
        </Button>
      </div>
    </div>
  );
};

export default Signup;
