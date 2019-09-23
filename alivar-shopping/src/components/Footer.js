import React, {Component} from 'react';

class Footer extends Component {
    constructor(props){
        super(props);

        this.state = {
        }
    }


    render(){



        return (
            <div className="footer">
                <div className="container">
                    <div className="row">
                        <div className="col-xs-12">
                            <div className="intro">
                                <h3> alivar </h3>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                </p>
                                <p>
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                            <div className="link">
                                <h3> liên kết </h3>
                                <a> Quy định sử dụng </a>
                                <a> Câu hỏi thường gặp </a>
                                <a> Hỗ trợ khách hàng </a>
                                <a> Liên hệ </a>
                            </div>
                            <div className="connect">
                                <h3> kết nối với alivar </h3>
                                <div className="social">
                                    <i className="fab fa-facebook-square" />
                                    <i className="fab fa-youtube" />
                                    <i className="fab fa-google-play" /> 
                                </div>
                                <div className="launch">
                                    <h4> công ty cổ phần inidimax </h4>
                                    <p>
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Footer;
