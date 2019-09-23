import React, {Component} from 'react';

class BtnSeeMore extends Component {
    constructor(props){
        super(props);

        this.state = {
        }
    }


    render(){

        return (
            <div className="row">
                <div className="col-xs-12">
                    <div className="btn-seemore">
                        <button> Xem thêm </button>
                    </div>
                </div>
            </div>
        );
    }
}

export default BtnSeeMore;
