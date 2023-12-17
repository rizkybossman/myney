import { useState } from "react";
import {
  TextField,
  InputAdornment,
  Icon,
  IconButton,
  Checkbox,
  FormControlLabel,
  Button,
} from "@mui/material";
import "./Login.css";

const Login = () => {
  const [showPassword, setShowPassword] = useState(false);
  const handleShowPasswordClick = () => {
    setShowPassword(!showPassword);
  };
  return (
    <div className="login">
      <div className="page-content">
        <div className="section-text">
          <div className="top">
            <b className="caption">Caption</b>
            <b className="main-headline">Lorem ipsum dolor sit amet.</b>
            <h1 className="secondary-headline">Welcome Back</h1>
          </div>
          <div className="paragraph">Please log in to continue</div>
        </div>
        <div className="form-2-fields-checkbox-b">
          <div className="fields-group">
            <div className="text-fieldtruetruefalsefal">
              <div className="text">Label Name</div>
              <div className="field">
                <img
                  className="icon-jam-icons-outline-l"
                  alt=""
                  src="/icon--jamicons--outline--logos--search.svg"
                />
                <div className="text1">Placeholder</div>
                <img
                  className="icon-jam-icons-outline-l"
                  alt=""
                  src="/icon--jamicons--outline--logos--search.svg"
                />
              </div>
            </div>
            <div className="text-fieldtruetruefalsefal">
              <div className="text">Label Name</div>
              <div className="field">
                <img
                  className="icon-jam-icons-outline-l"
                  alt=""
                  src="/icon--jamicons--outline--logos--search.svg"
                />
                <div className="text1">Placeholder</div>
                <img
                  className="icon-jam-icons-outline-l"
                  alt=""
                  src="/icon--jamicons--outline--logos--search.svg"
                />
              </div>
            </div>
          </div>
          <div className="text-field">
            <div className="label-and-field">
              <div className="label">Email Address</div>
              <TextField
                className="field2"
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
          <div className="text-field">
            <div className="label-and-field">
              <div className="label">Password</div>
              <TextField
                className="field2"
                color="success"
                label="Placeholder"
                required={true}
                error={true}
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
            <div className="description1">
              It must be a combination of minimum 8 letters, numbers, and
              symbols.
            </div>
          </div>
          <div className="text-fieldtruetruefalsefal2">
            <div className="text">Label Name</div>
            <div className="field">
              <img
                className="icon-jam-icons-outline-l4"
                alt=""
                src="/icon--jamicons--outline--logos--search.svg"
              />
              <div className="text1">Placeholder</div>
              <img
                className="icon-jam-icons-outline-l4"
                alt=""
                src="/icon--jamicons--outline--logos--search.svg"
              />
            </div>
          </div>
          <div className="group">
            <FormControlLabel
              label="Remember me"
              control={<Checkbox color="primary" defaultChecked />}
            />
            <a className="forgot-password">Forgot Password?</a>
          </div>
          <Button
            className="button"
            color="primary"
            variant="contained"
            href="/menu-overview"
          >
            Log In
          </Button>
          <div className="vestibulum-faucibus-odio">
            Vestibulum faucibus odio vitae arcu auctor lectus.
          </div>
        </div>
        <div className="paragraph-parent">
          <div className="label">Or log in with:</div>
          <div className="login-with">
            <button className="button1">
              <img
                className="icon-jam-icons-outline-l4"
                alt=""
                src="/icon--jamicons--outline--logos--google.svg"
              />
              <div className="text-container">
                <div className="button-text">Google</div>
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
        <a className="no-account-yet">No account yet? Sign Up</a>
      </div>
    </div>
  );
};

export default Login;
