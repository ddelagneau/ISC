import React from 'react';
import ReactDOM from 'react-dom';

export default class User extends Component {
    render() {
        return (
            <div className="container">
              <div className="row justify-content-center">
                <div className="col-md-8">
                  <div className="card">
                    <div className="card-header">U</div>

                    <div className="card-body">
                      User
                    </div>
                  </div>
                </div>
              </div>
            </div>
        );
    }
}

if (document.getElementById('user')) {
  ReactDOM.render(<User />, document.getElementById('user'));
}
